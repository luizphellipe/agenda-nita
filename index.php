



<?php require_once "_header.php" ?>

<div class="full">
      
      <center>
       <div id="topo" style="border-radius:10px ;text-align:center">
       <a href="index.html"> <img  id="icone" src= "_imagens/nita-oficial2.png" a href="index.html"/> </a>
       
           <p><h1 style="color:gray;">AGENDA NITA</h1></p>

           
       </div>



<div class="container"; >

	<div id="esquerda" style="border-radius:10px" ; ><h1></h1>
    
       
            <form class="fmCadastro" action="processa.php?p=adiciona" method="post" style="border-radius:10px ;text-align:center" >

                <div id="formulario" style="border-radius:10px ;text-align:center">
                    <label for="nome_agenda" color="000222">Nome:</label>
                    <input type="text" name="nome_agenda" >
                    
                </div>

                <!--div class="form-group">
                    <label for="tipo_agenda">Tipo:</label>
                    <select name="tipo_agenda" class="form-control">
                        <option value="0">Celular</option>
                        <option value="1">Telefone Fixo</option>
                    </select>
                </div-->
                <br>
                <div id="formulario" style="border-radius:10px ;text-align:center ">
                    <label for="fone1_agenda">Telefone 1 :</label>
                    <input type="text" name="fone1_agenda">
                </div>

                <br>

                <div id="formulario" style="border-radius:10px ;text-align:center">
                    <label for="fone2_agenda">Telefone 2 :</label>
                    <input type="text" name="fone2_agenda">
                </div>

                <br>

                <div id="formulario" style="border-radius:10px ;text-align:center">
                    <label for="celular_agenda">Celular :</label>
                    <input type="text" name="celular_agenda" >
                </div>

                <br>

                <div id="formulario" style="border-radius:10px ;text-align:center">
                    <label for="email_agenda">E-mail:</label>
                    <input type="text" name="email_agenda" >
                </div>

                <br>

                <div >
                    <button type="submit" style="border: 2px solid grey ;border-radius: 5px;">Cadastrar</button>
                </div>
                </form>
                <div class="resposta"></div>
     </div>

<!--?php
if(isset($_POST['nome_agenda'])){

$con_nome = $_POST['nome_agenda'];
$con_fone1 = $_POST['fone1_agenda'];
$con_fone2 = $_POST['fone2_agenda'];
$con_celular = $_POST['celular_agenda'];
$con_email = $_POST['email_agenda'];

$response = inserirNovoContato($con_nome,$con_fone1,$con_fone2,$con_celular,$con_email); }
 /*
echo "<pre>";

print_r($response);*/
?-->

<?php require_once "_footer.php" ?>