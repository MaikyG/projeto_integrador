<?php
require "cabecalho.php"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/fale-conosco.css">
<style>

.content{
    width: 250px;
       
    margin: 20px ;
    /* position: relative; */   
    
  }

  

.teste {
    margin: 25px;
    
}


</style> -->

</head>
<main class="w-50 mx-auto">
        <article class="w-75 mx-auto">

            <h2>Contato</h2>
    
            <p class="d-flex flex-nowrap">Fale conosco mandando um menssagem neste formulario.</p>

            
            <form  id="my-form" action="" method="post">
<table class="w3-table">
<tr>
                <div>
                   <td class="text-dark"> <label for="nome">Nome:</label> </td>
                   <td > <input class="border border-primary" placeholder="nome" type="text" name="" id="nome" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">  <label for="email">E-mail:</label> </td>
                <td>  <input class="border border-primary" placeholder="email" type="email" name="" id="email" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="data">Data de nascimento:</label> </td>
                <td>   <input class="border border-primary" type="date" name="data" id="data" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="telefone">Telefone:</label> </td>
                <td>   <input class="border border-primary" placeholder="telefone" type="tel" name="telefone" id="telefone"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="idade">Idade:</label> </td>
                <td>  <input class="border border-primary" placeholder="idade" type="number" name="idade" id="idade" min="18" max="100" required> </td>
                </div>
                </tr>
                </table>

                <div class="teste">
                   <p class="text-dark">Sexo:</p> 
                   <input class=" mx-2 border border-primary" value="Masculino" type="radio" name="sexo" id="masculimo"> 
                   <label class="w-25 border border-primary rounded " for="masculimo">Masculimo</label> 

                   <input class="border border-primary" value="Feminino" type="radio" name="sexo" id="feminino"> 
                   <label class="border border-primary rounded " for="feminino">Feminino</label> 
                </div>
                


                <div class="teste">
                   <p class="text-dark">Interesses</p> </td>
                    <div class="custom-control custom-checkbox">
                   <input class=" mx-1 border border-primary custom-control-input " value="Desing" type="checkbox" name="interesses" id="desing customCheck1"> 
                   <label class=" w-25 border border-primary custom-control-label rounded " for="desing customCheck1">Desing</label> 
                    </div>

                    <div class="custom-control custom-checkbox">
                   <input class=" mx-1 border border-primary custom-control-input" value="Robotica" type="checkbox" name="interesses" id="robotica customCheck1"> 
                   <label class=" w-25 border border-primary custom-control-label rounded" for="robotica customCheck1">Robotica</label> 
                   </div>

                   <div class="custom-control custom-checkbox ">
                   <input class=" mx-1 border border-primary custom-control-input" value="Programação" type="checkbox" name="interesses" id="programacao customCheck1"> 
                   <label class=" w-25 border border-primary custom-control-label rounded" for="programacao customCheck1">Programação</label> 
                   </div>
                </div>
                

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <table>
                <tr>
                <div class="content">
                <td class="text-dark">   <label for="cep">CEP:</label> </td>
                <td class="">   <input class="border border-primary rounded" type="text" id="cep" name="cep" maxlength="9" required> </td>
</table>
                   <button type="button" class="btn btn-primary btn-sm" id="localizar-cep">Localizar</button> 
                    <b id="status"></b>
                    <table>
                </div>
                </tr>

                <tr>
                <div class="content ">
                <td class="text-dark">   <label for="endereco">Endereço:</label> </td>
                <td class="">   <input class="border border-primary rounded" type="text" id="endereco" name="endereco" size="30"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="bairro">Bairro:</label> </td>
                <td class="">   <input class="border border-primary rounded" type="text" id="bairro" name="bairro"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="cidade">Cidade:</label> </td>
                <td class="">   <input class="border border-primary rounded" type="text" id="cidade" name="cidade"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td class="text-dark">   <label for="estado">Estado:</label> </td>
                <td class="">   <input class="border border-primary rounded" type="text" id="estado" name="estado"> </td>
                </div>
                </tr>
                </table>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->

                
                <div class="content">
                   <label class="text-dark" for="assunto">Assunto:</label> 
                    <select class="border border-primary rounded" name="" id=""> 
                        <option></option> 
                       <option>Duvida</option> 
                       <option>Elogio</option> 
                       <option>Reclamações</option> 
                        <option>Outros</option> 
                    </select>
                </div>
                
                
                
                <div class="content">
                   <label class="text-dark" for="mensagem">Mensagem:  
                   <span id="maximo"> (restam <b class="text-dark" id="caracteres">100</b> caracteres)</span>
                    </label> <br>
                    <textarea class="border border-primary" maxlength="100" placeholder="mensagem" name="mensagem" id="mensagem" cols="20" rows="5"></textarea>
                </div>
                


                
                <td> <button type="submit button" class="btn btn-primary btn-sm">Enviar dados</button> </td>
                <p id="my-form-status"></p>
              
                
            </form>

        </article>
    </main>

