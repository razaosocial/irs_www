<?php include("inc/head.php"); ?>
<link href="css/style_jquery.css" rel="stylesheet" type="text/css" />

    <script language="javascript">
        $(document).ready(function () {
            $('h2.accordion').click(function () {
                $(this).parent().find('div.accordion').slideToggle("fast");
            });
        });
    </script>
<?php include("inc/cabecalho.php");
include("inc/menu.php");
?>
     <div class="conteudo">
                <div class="titulo_green">
        Áreas de Atuação</div>
    <div class="sub_titulo">
        <img src="images/bullet.gif" />Formação Continuada</div>
    <div>
        Por meio da tecnologia digital, a formação continuada alia teoria e prática em uma
        rede online que amplia as competências profissionais ao atualizar saberes e promover
        reflexões que possibilitam novas estratégias de ensino.
    </div>
    <div>
        <h2 class="accordion">
            +Programas</h2>
        <div class="accordion">
            <strong>Educação Infantil</strong><br />
            Elaboração de projetos que visam à melhoria na qualidade da educação infantil por
            meio de programas de formação continuada de profissionais e gestores das redes públicas
            de ensino.<br />
            <a href="formar-em-rede.php">● Formar em rede</a><br />
            <br />
            <strong>Alfabetização</strong><br />
            Elaboração de projetos para ampliar a eficiência e a eficácia dos processos de alfabetização
            em escolas públicas, por meio da formação de professores alfabetizadores das redes
            de ensino público.<br />
            <a  href="alem-das-letras.php">● Além das Letras</a><br />
            <a href="alem-dos-numeros.php">● Além dos Numeros</a><br />
            <br />
            <strong>Gestão Escolar</strong><br />
            Ampliar as oportunidades de formação de gestores comprometidos com a construção
            de um projeto democrático da escola pública, focado no sucesso do aluno.<br />
            <a href="progestao.php">● Progestão</a><br />
        </div>
    </div>
    <br />
    <br />
    <div class="sub_titulo">
        <img src="images/bullet.gif" />Cursos e Redes Online</div>
    <div>
        Desenvolvimento de cursos online para suportar as ações do Razão Social e dos nossos
        Sócios e parceiros, bem como para complementar programas e ações voltados aos profissionais
        da educação, com foco nas redes públicas de ensino.
    </div>
    <div>
        <h2 class="accordion">
            +Ações</h2>
        <div class="accordion">
            <a href="curso-nome-proprio.php">● Curso Nome Próprio</a><br />
            <a href="curso-leitura-professor.php">● Curso Leitura pelo Professor</a><br />
            <a href="ambientacao-online.php">● Ambientação Online</a><br />
            <a href="redes-online-peb.php">● Redes Online do Projeto Escola Brasil</a><br />
            <a href="curso-agua.php">● Curso d'Água</a>
        </div>
    </div>
    <br />
    <br />
    <div class="sub_titulo">
        <img src="images/bullet.gif" />Gestão de Portais</div>
    <div>
        Gerenciamento e/ou hospedagem de portais para suportar programas desenvolvidos pelo
        Razão Social e parceiros; e/ou desenvolvimento de cursos online com o intuito de
        contribuir para a prática pedagógica de profissionais da educação.
    </div>
    <div>
        <h2 class="accordion">
            +Ações</h2>
        <div class="accordion">
            <a href="portal-gestao-consed.php">● Portal de Gestão Consed</a><br />
            <a href="mesa-educadora.php">● Programa Mesa Educadora</a>
        </div>
    </div>
    <br />
    <br />
    <div class="sub_titulo">
        <img src="images/bullet.gif" />Articulação</div>
    <div>
        Otimização do investimento social privado na busca pela melhoria da qualidade da
        educação pública brasileira, na perspectiva de incluir novos parceiros e novos conhecimentos.
    </div>
    <div>
        <h2 class="accordion">
            +Ações</h2>
        <div class="accordion">
            <a href="mobilizacao-social.php">● Mobilização Social para Educação</a><br />
        </div>
    </div>
     </div>
                
<?php include("inc/parceiros.php");
include("inc/rodape.php"); 
?>