from flask import Flask, render_template, request, redirect, url_for, flash
import folium
import json
import os

app = Flask(__name__)
# Chave secreta para usar mensagens 'flash' (feedback para o usuário)
app.secret_key = 'sua_chave_secreta_aqui'

PONTOS_DB_PATH = 'pontos_coleta.json'

# --- Funções Auxiliares para o "Banco de Dados" ---
def carregar_pontos():
    """Carrega os pontos do arquivo JSON."""
    if not os.path.exists(PONTOS_DB_PATH):
        return []
    with open(PONTOS_DB_PATH, 'r', encoding='utf-8') as f:
        return json.load(f)

def salvar_pontos(pontos):
    """Salva a lista de pontos no arquivo JSON."""
    with open(PONTOS_DB_PATH, 'w', encoding='utf-8') as f:
        json.dump(pontos, f, indent=2, ensure_ascii=False)

# --- Rota Principal para Exibir o Mapa ---
@app.route('/mapa')
def mapa_de_coleta():
    # Coordenadas iniciais do mapa (Ex: centro de São Paulo)
    mapa = folium.Map(location=[-23.5505, -46.6333], zoom_start=12)

    pontos = carregar_pontos()

    # Adiciona um marcador para cada ponto APROVADO
    for ponto in pontos:
        if ponto['aprovado']:
            folium.Marker(
                location=[ponto['lat'], ponto['lon']],
                popup=f"<strong>{ponto['nome']}</strong><br>Materiais: {ponto['materiais']}",
                tooltip="Clique para ver detalhes"
            ).add_to(mapa)

    # Converte o mapa para HTML
    mapa_html = mapa._repr_html_()
    return render_template('mapa.html', mapa_html=mapa_html)

# --- Rotas para Cadastrar um Novo Ponto ---
@app.route('/mapa/novo', methods=['GET', 'POST'])
def novo_ponto():
    if request.method == 'POST':
        # Pega os dados do formulário
        nome = request.form['nome']
        lat = float(request.form['lat'])
        lon = float(request.form['lon'])
        materiais = request.form['materiais']

        pontos = carregar_pontos()
        
        # Cria um novo ponto (não aprovado por padrão)
        novo = {
            "id": len(pontos) + 1,
            "nome": nome,
            "lat": lat,
            "lon": lon,
            "materiais": materiais,
            "aprovado": False
        }
        pontos.append(novo)
        salvar_pontos(pontos)

        # Envia uma mensagem de sucesso para o usuário
        flash('Obrigado! Seu ponto de coleta foi enviado para aprovação.')
        return redirect(url_for('mapa_de_coleta')) # Redireciona de volta para o mapa

    # Se for GET, apenas mostra o formulário de cadastro
    return render_template('novo_ponto.html')

if __name__ == '__main__':
    app.run(debug=True)