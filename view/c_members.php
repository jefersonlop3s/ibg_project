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
        <label>Nome</label>
        <input type="text" class="form-control" id="person_name" name="person_name" placeholder="Nome" required>
    </div>
    <div>
        <label>Sobrenome</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Sobrenome" required>
    </div>
    <div>
        <label>Data Nasc.:</label>
        <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" placeholder="Data de Nascimento" required>
    </div>
    <div>
        <label>Pai</label>
        <input type="text" class="form-control" id="id_father_person" name="id_mother_person" placeholder="Nome do Pai">
    </div>
    <div>
        <label>Mãe</label>
        <input type="text" class="form-control" id="id_mother_person" name="id_mother_person" placeholder="Nome da Mãe">
    </div>

    <!-- nation  -->
    <div class="form-group">
        <label for="Estado">Selecione a UF do endereço</label>
        <select class="form-control" id="id_uf" name="id_uf" required>
            <option>São Paulo</option>
            <option>Minas Gerais</option>
            <option>Rio de Janeiro</option>
            <option>Paraná</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Estado">Selecione a Cidade para endereçamento</label>
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
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email@dom.com">
  </div>
  <br>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
</div>

<?php include(FOOTER_TEMPLATE); ?>