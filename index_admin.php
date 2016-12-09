<?php
    $login_cookie = $_COOKIE['username_admin'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie !<br>";
            echo"Você está logado como administrador!<br>";
            echo"<br><a href='logout_admin.php'>Clique aqui</a> para deslogar<br>";
            echo"<br>OPÇÕES DE ADMINISTRADOR:<br>";
            echo"<br><a href='lista_usuarios.php'>Listar Usuários do Sistema</a><br>";
            echo"<br><a href='lista_agenda.php'>Listar Contatos da Agenda</a><br>";
            echo"<br><a href='lista_empresas.php'>Listar Empresas cadastradas no Sistema</a><br>";
            echo"<br><a href='detalhescontato.html'>Ver Detalhes e Informações de Contato de uma pessoa da agenda</a><br>";
            echo"<br><a href='cadastro_usuarios.html'>Cadastrar Usuários no Sistema</a><br>";
            echo"<br><a href='cadastro_agenda.html'>Cadastrar Contatos na Agenda</a><br>";
            echo"<br><a href='cadastro_empresas.html'>Cadastrar Empresas no Sistema</a><br>";
            echo"<br><a href='telefones.html'>Adicionar Telefones a Contato</a><br>";
            echo"<br><a href='emails.html'>Adicionar e-mails a Contato</a><br>";
            echo"<br><a href='empresas.html'>Adicionar Empresa a Contato</a><br>";
            echo"<br><a href='deleta_usuarios.html'>Deletar Usuários no Sistema</a><br>";
            echo"<br><a href='deleta_agenda.html'>Deletar Contatos na Agenda</a><br>";
            echo"<br><a href='deletar_telefone.html'>Deletar Telefone na Agenda</a><br>";
            echo"<br><a href='deletar_email.html'>Deletar e-mail na Agenda</a><br>";
            echo"<br><a href='deletar_empresa.html'>Deletar Empresa no Sistema</a><br>";
            echo"<br><a href='modifica_usuarios.html'>Modificar Usuários do Sistema</a><br>";
            echo"<br><a href='modifica_agenda.html'>Modificar Contatos na Agenda</a><br>";
            echo"<br><a href='modifica_empresa.html'>Modificar Empresa no Sistema</a><br>";
            echo"<br><a href='modifica_telefone.html'>Modificar Telefone na Agenda</a><br>";
            echo"<br><a href='modifica_email.html'>Modificar e-mail na Agenda</a><br>";
            echo"<br><a href='lista_admins.php'>Listar Administradores do Sistema</a><br>";
            echo"<br><a href='cadastro_admin.html'>Cadastrar Administradores do Sistema</a><br>";
            echo"<br><a href='lista_telefones.php'>Ver Lista de Telefones</a><br>";
            echo"<br><a href='lista_emails.php'>Ver Lista de E-mails</a><br>";
            echo"<br><a href='gera_pdf.php'>Gerar Arquivo PDF de Usuarios do Sistema</a><br>";
            echo"<br><a href='exporta_csv.php'>Gerar Arquivo CSV de Usuarios do Sistema</a><br>";
            echo"<br><a href='gera_pdf_agenda.php'>Gerar Arquivo PDF de Contatos da Agenda</a><br>";
            echo"<br><a href='exporta_csv_agenda.php'>Gerar Arquivo CSV de Contatos da Agenda</a><br>";
            echo"<br><a href='gera_pdf_admin.php'>Gerar Arquivo PDF de Administradores do Sistema</a><br>";
            echo"<br><a href='exporta_csv_admin.php'>Gerar Arquivo CSV de Administradores do Sistema</a><br>";
            echo"<br><a href='gera_pdf_empresas.php'>Gerar Arquivo PDF das Empresas</a><br>";
            echo"<br><a href='exporta_csv_empresas.php'>Gerar Arquivo CSV das Empresas</a><br>";
            echo"<br><a href='gera_pdf_telefones.php'>Gerar Arquivo PDF de Telefones</a><br>";
            echo"<br><a href='exporta_csv_telefones.php'>Gerar Arquivo CSV de Telefones</a><br>";
            echo"<br><a href='gera_pdf_emails.php'>Gerar Arquivo PDF de e-mails</a><br>";
            echo"<br><a href='exporta_csv_emails.php'>Gerar Arquivo CSV de e-mails</a><br>";

        }else{
            echo"Bem-Vindo, visitante!<br>";
            echo"Você ainda não está logado..<br>";
            echo"<br><a href='login.html'>Faça Login</a> para acessar o site<br>";
            echo"Ou <a href='login_admin.html'>Clique Aqui</a> para logar como administrador";
        }
?>	