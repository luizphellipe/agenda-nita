<?php

require_once "vendor/autoload.php";

//VERIFICAR SE HOUVE REQUISIÇÃO


if(isset($_GET['p'])) {

	$response = trim($_GET['p']);


     switch ($response) {

         //VALIDAR CAMPOS
     	case 'adiciona':


     	if(isset($_POST['nome_agenda']) && empty($_POST['nome_agenda'])) {
     		echo json_encode(
                     array(
                    "status" => 1,
                    "msg"=> "Insira o nome do contato"
             )
     		);
     		exit;

     	} elseif (isset($_POST['fone1_agenda']) && empty($_POST['fone1_agenda'])) {
     		echo json_encode(
                     array(
                    "status" => 1,
                    "msg"=> "Insira o telefone"
             )
     		);
     		exit;

     		} elseif (isset($_POST['fone2_agenda']) && empty($_POST['fone2_agenda'])) {
     		echo json_encode(
                     array(
                    "status" => 1,
                    "msg"=> "Insira o telefone"
             )
     		);
     		exit;

     		} elseif (isset($_POST['celular_agenda']) && empty($_POST['celular_agenda'])) {
     		echo json_encode(
                     array(
                    "status" => 1,
                    "msg"=> "Insira o celular"
             )
     		);
     		exit;

     		} elseif (isset($_POST['email_agenda']) && empty($_POST['email_agenda'])) {
     		echo json_encode(
                     array(
                    "status" => 1,
                    "msg"=> "Insira o e-mail"
             )
     		);
     		exit;
     		# code...
     	}  // ENVIA PARA O BANCO
     	 else {
     	 	 $con_nome = trim ($_POST['nome_agenda']);
             $con_fone1 = trim ($_POST['fone1_agenda']);
             $con_fone2 = trim ($_POST['fone2_agenda']);
             $con_celular = trim ($_POST['celular_agenda']);
             $con_email = trim ($_POST['email_agenda']);

             //CHAMA A FUNÇÃO INSERIR CONTATO

             $insere = inserirNovoContato($con_nome,$con_fone1,$con_fone2,$con_celular,$con_email);

             if($response == 1 ){
              echo json_encode(

              	array (
              		"status" => 1,
              		"msg" => "Contato cadastrado com sucesso"

              	)
              );
          }

     	}
    
     	 header("location: index.php");
     		# code...
     		break;
     	
     	default:
     		# code...
     		break;
     }
}


/*$con_nome = $_POST['nome_agenda'];
$con_fone1 = $_POST['fone1_agenda'];
$con_fone2 = $_POST['fone2_agenda'];
$con_celular = $_POST['celular_agenda'];
$con_email = $_POST['email_agenda'];

$response = inserirNovoContato($con_nome,$con_fone1,$con_fone2,$con_celular,$con_email); }*/