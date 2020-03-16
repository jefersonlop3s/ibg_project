<?php
/**
 * Autor: Jeferson Lopes de Oliveira Mendes
 * User: Jeferson Lopes
 * Date: 2020/03/10
 */

require_once('../config.php');
require_once(DBAPI);
/** include_once(LOGIN); */ 
include(HEADER_TEMPLATE);
$pdo = Conexao::getInstance(); ?>

<div class="container">
<form>
    <div>
        <label>Igreja</label>
        <input type="text" class="form-control" id="church_desc" name="church_desc" placeholder="Igreja Batista" required>
    </div>
    <!-- nation  -->
    <div class="form-group">
        <label for="Estado">Selecione a UF da localização da igreja a cadastrar</label>
        <select class="form-control" id="id_uf" name="id_uf" required>
            <option>São Paulo</option>
            <option>Minas Gerais</option>
            <option>Rio de Janeiro</option>
            <option>Paraná</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Estado">Selecione a Cidade da localização da igreja a ser cadastrada</label>
        <select class="form-control" id="city" name="city" required>
            <option>São Paulo</option>
            <option>Osasco</option>
            <option>Jandira</option>
            <option>Barueri</option>
            <option>Itapevi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tipo Logradouro">Selecione o tipo de logradouro</label>
        <select class="form-control" id="tp_address" name="tp_address" required>
            <option>Rua</option>
            <option>Avenida</option>
            <option>Viela</option>
            <option>Rodovia</option>
        </select>
    </div>
    <div>
        <label>Endereço</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Endereço da igreja" required>
    </div>
    <div>
        <label>Número</label>
        <input type="number" class="form-control" id="addr_number" name="addr_number" placeholder="Número" required>
    </div>
    <div>
        <label>Bairro</label>
        <input type="text" class="form-control" id="district" name="district" placeholder="Bairro/Distrito" required>
    </div>
    <div>
        <label>CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="01234-567" required>
    </div>
    <div>
        <label>Telefone</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="11 99876-5432">
    </div>
  <div>
    <label>Email Oficial da Igreja</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email@dom.com">
  </div>
  <div>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div></form>
</div>

<?php include(FOOTER_TEMPLATE); ?>