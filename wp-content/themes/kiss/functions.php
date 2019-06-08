<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');








class Usuario
{
    protected $pdo;

    public function __construct()
    {

        $this->pdo = new PDO("mysql:dbname=kiss;host=localhost", "root", "");

    }
    public function getUsuario()
    {

        $sql = "SELECT * FROM usuario WHERE ativo = 1 AND usuario.id = " . $_SESSION['kiss-rai'];
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {

            return $sql->fetchAll();
        } else {
            echo 'else: ';
            return array();
        }
    }

    public function adicionarUsuario($nome, $cpf, $datanascimento, $telefone, $email, $senha)
    {
        $sql = "INSERT INTO usuario(nome, cpf, datanascimento, telefone, email, senha) VALUES (:nome, :cpf, :datanascimento, :telefone, :email, :senha)";
        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':datanascimento', $datanascimento);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

    }



    public function editarUsuario($id, $nome, $cpf, $datanascimento, $telefone, $email, $senha)
    {
        $sql = "UPDATE usuario SET id=:id, nome=:nome, cpf=:cpf, datanascimento=:datanascimento, telefone=:telefone, email=:email, senha=:senha WHERE id=:id AND ativo='1'";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':datanascimento', $datanascimento);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

    }

}










//-----------------------ENDEREÇO


class Endereco
{
    protected $pdo;

    public function __construct()
    {

        $this->pdo = new PDO("mysql:dbname=kiss;host=localhost", "root", "");

    }

    public function getEndereco()
    {
        if (!empty($_SESSION['kiss-rai'])) {

            $id_usuarioEditar = $_SESSION['kiss-rai'];

            $sql = ("SELECT 
                endereco.id, endereco.rua, endereco.cep, endereco.numero, endereco.complemento, endereco.referencia, endereco.cidade , endereco.estado,usuario.nome
                        FROM
                endereco
						INNER JOIN usuario ON endereco.id_usuario = usuario.id
           
            WHERE
                usuario.ativo = 1 AND endereco.id_usuario = $id_usuarioEditar");
            $sql = $this->pdo->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return $sql->fetchAll();
                return array();
            } else {
                echo'Cadastre o Endereço';
            }

        }


    }

    public function adicionarEndereco($id_usuario,$rua, $cep,  $numero, $complemento, $referencia, $cidade,$estado)
    {
        if (!empty($_SESSION['kiss-rai'])) {

            $id_usuario = $_SESSION['kiss-rai'];
        }

        $sql = "INSERT INTO endereco(id_usuario,rua, cep, numero, complemento, referencia, cidade,estado) VALUES (:id_usuario,:rua, :cep, :numero, :complemento, :referencia, :cidade,:estado)";
        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(':id_usuario', $id_usuario);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':referencia', $referencia);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->execute();

    }




    public function updateEndereco($id,$id_usuario,$rua, $cep,  $numero, $complemento, $referencia, $cidade,$estado)
    {

            $sql = "UPDATE endereco SET rua=:rua, cep=:cep,  numero=:numero, complemento=:complemento, referencia=:referencia, cidade=:cidade,estado=:estado            
            WHERE
                id = :id";
        $sql = $this->pdo->prepare($sql);


        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':referencia', $referencia);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':id', $id);
        $sql->execute();


    }

}

class Mascara
{

    function getmask($val, $mask)
    {
        $mascara = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k]))
                    $mascara .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $mascara .= $mask[$i];
            }
        }
        return $mascara;
    }

}
//        $sql = ("SELECT DISTINCT
//                endereco.id, endereco.rua, endereco.cep, endereco.numero, endereco.complemento, endereco.referencia, endereco.cidade , endereco.estado
//                        FROM
//                endereco
//						INNER JOIN usuario ON endereco.id_usuario = usuario.id
//
//            WHERE
//                usuario.ativo = 1 AND endereco.id_usuario = usuario.id");
//
//        $sql = $this->pdo->prepare($sql);
//        $sql->execute();
//
//        if ($sql->rowCount() > 0) {
//            return $sql->fetchAll();
//        } else {
//            return array();
//        }






//add_theme_support('post-thumbnails');

//Custom Images Sizes
//function tratar_imagem(){
//add_image_size('large', 1400, 380, true);
//add_image_size('medium', 768, 380, true);

//}
//add_action('after_setup_theme','habilitar_menu');
//add_action('after_setup_theme','tratar_imagem');


//add_action('wp_ajax_insereDados', 'insereDados');
//add_action('wp_ajax_nopriv_insereDados', 'insereDados'); // aparentemente não é obrigatorio utilizar este action
//
//function insereDados()
//{
//    echo $_POST['email'];
//}
//

//Custom post type
// function custom_post_type_perguntas() {

// 	register_post_type('perguntas', array(
// 		'label' => 'Perguntas',
// 		'description' => 'Perguntas',
// 		'public' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'capability_type' => 'post',
// 		'map_meta_cap' => true,
// 		'hierarchical' => false,
// 		'rewrite' => array('slug' => 'perguntas', 'with_front' => true),
// 		'query_var' => true,
// 		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

// 		'labels' => array (
// 			'name' => 'Perguntas',
// 			'singular_name' => 'Pergunta',
// 			'menu_name' => 'Perguntas',
// 			'add_new' => 'Adicionar Novo',
// 			'add_new_item' => 'Adicionar Nova Pergunta',
// 			'edit' => 'Editar',
// 			'edit_item' => 'Editar Pergunta',
// 			'new_item' => 'Nova Pergunta',
// 			'view' => 'Ver Pergunta',
// 			'view_item' => 'Ver Pergunta',
// 			'search_items' => 'Procurar Perguntas',
// 			'not_found' => 'Nenhum Artigo Encontrado',
// 			'not_found_in_trash' => 'Nenhum Artigo Encontrado no Lixo',
// 		)
//     ));
// }

//add_action('init', 'custom_post_type_perguntas'); 
