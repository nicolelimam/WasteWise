<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contpl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Controle de produção de lixo</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="WasteWise.png" alt="Logo" class="logo-image">
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Voltar ao início</a></li>
                    <li class="contaUser">
                        <label class="lbuser">Olá, @User</label>
                        <a href="meuperfil.html" class="btnPerfil" id="btnPerfil">
                            <div class="iconuser" id="iconuser"></div>
                            <script>
                                // Script para puxar foto do usuario da pasta local
                                document.addEventListener("DOMContentLoaded", function() {
                                    var userImageURL = "usuarioex.jpg";
                                    var iconuser = document.getElementById("iconuser");
                                    iconuser.style.backgroundImage = `url('${userImageURL}')`;
                                });
                            </script>
                        </a>
                    </li>
                    <li><a href="index.html" class="btnSair" id="btnSair">Sair</a></li>
                </ul>
            </nav>
        </div>
        <div class="conteudo">
            <div class="left">
                <div class="titulopag">
                    <h1>Controle de produção de lixo</h1>
                    <h3>Relatório de produção de lixo anteriores</h3>
                </div>
                <div class="paneldados">
                </div>
            </div>
            <div class="right">
                <div class="formulario">
                    <h2>Adicionar novo registro</h2>
                    <br>
                    <label class="lbform">Lixeira</label>
                    <div class="combobox">
                        <select class="campotxt">
                            <option value="op1">Lixeira L0001 1.0</option>
                        </select>
                    </div>
                    <label class="lbform">Volume</label>
                    <input type="text" name="campoVolume" class="campotxt">
                    <label class="lbform">Tipo de Lixo</label>
                    <div class="combobox">
                        <select class="campotxt">
                            <option value="opc1" class="campotxt">Orgânico</option>
                            <option value="opc2" class="campotxt">Reciclável</option>
                            <option value="opc3" class="campotxt">Não reciclável</option>
                        </select>
                    </div>
                    <label class="lbform">Data</label>
                    <input type="date" id="data" name="data" class="campotxt">
                    <label class="lbform">Observações (opcional)</label>
                    <input type="text" name="campoObs" class="campotxt2">
                    <input type="submit" name="btnRegistrar" class="btnReg">
                    <br><br>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>