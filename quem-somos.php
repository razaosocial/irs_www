<?php include("inc/head.php");?>
 <link href="css/style_jquery.css" rel="stylesheet" type="text/css" />
    
    <script language="javascript">
        $(document).ready(function () {

            $('.tabs a').click(function () {
                switch_tabs($(this));
            });

            switch_tabs($('.default_tab'));

        });

        function switch_tabs(obj) {
            $('.tab-content').hide();
            $('.tabs a').removeClass("selected");
            var id = obj.attr("rel");

            $('#' + id).show();
            obj.addClass("selected");
        }
    </script>

<?php include("inc/cabecalho.php");
include("inc/menu.php");
?>
     <div class="conteudo">
                 <div>
        <div class="titulo_green">
            Quem Somos</div>
        <ul class="tabs">
            <li><a href="#" class="default_tab" rel="tabs1">Nossas Crenças</a></li>
            <li><a href="#" rel="tabs2">Missão e Visão</a></li>
            <li><a href="#" rel="tabs3">Mantenedores</a></li>
            <li><a href="#" rel="tabs4">Parceiro Tecnológico</a></li>
            <li><a href="#" rel="tabs5">Conselho e Equipe</a></li>
        </ul>
        <div class="tab">
            <div class="tab-content" id="tabs1">
                <strong>EDUCAÇÃO FORMAL</strong><br />
                O capital social e a capacidade de sustentabilidade da sociedade dependem do grau
                de educação de sua população. A melhoria da qualidade da educação está ligada, de
                modo intrínseco, à formação de profissionais e gestores escolares da rede pública
                do país.<br />
                <br />
                <strong>OTIMIZAÇÃO DO INVESTIMENTO SOCIAL</strong><br />
                Quando as empresas identificam sinergias entre seus interesses e objetivos sociais,
                potencializam conhecimentos e recursos ao associarem-se.<br />
                <br />
                <strong>ACESSO E REPLICABILIDADE</strong><br />
                Nos próximos anos haverá uma mudança de paradigma em relação ao ambiente de tecnologia
                e à acessibilidade e replicabilidade de informações.
            </div>
            <div class="tab-content" id="tabs2">
                <strong>VISÃO</strong><br />
                A otimização do investimento social privado disponibilizará os melhores processos
                de ensino/aprendizagem a educadores e alunos brasileiros, por meio da tecnologia.<br />
                <br />
                <strong>MISSÃO</strong><br />
                Conjugar investimentos sociais privados no sentido de contribuir com o desenvolvimento
                de processos de ensino/aprendizagem e com a formação de educadores da rede pública.
            </div>
            <div class="tab-content" id="tabs3">
            	<a href="http://www.gerdau.com.br" target="_blank"><strong>GERDAU</strong></a><br /> 
                A Gerdau é líder no segmento de aços longos nas Américas e um dos maiores fornecedores
                de aços longos especiais do mundo. A empresa começou a traçar sua rota de expansão
                há mais de um século e hoje possui presença industrial em 14 países.<br />
                <br />
                No Brasil, possui operações em quase todos os Estados, que produzem aços longos
                comuns, especiais e planos. Seus produtos, comercializados nos cinco continentes,
                atendem os setores da construção civil, indústria e agropecuária.<br />
                <br />
                Com ações listadas nas Bolsas de Valores de São Paulo, Nova York, Toronto, Madri
                e Lima, a Gerdau busca eficiência e crescimento com rentabilidade, sempre comprometida
                com o desenvolvimento sustentável.<br />
                <br />
                <a href="http://www.promon.com.br" target="_blank"><strong>PROMON</strong></a>
       			<br />
                Empresa brasileira constituída em 1960, a Promon oferece aos seus clientes projeto,
                integração e implementação de soluções completas de infraestrutura para setores-chave
                da economia.<br />
                <br />
                O domínio das técnicas de engenharia e gerenciamento, uma equipe altamente qualificada
                de profissionais e a capacidade de articular parcerias com empresas lideres nas
                suas áreas de atuação são a base do sucesso da Promon em todas as suas realizações.
            </div>
            <div class="tab-content" id="tabs4">
             	<a href="http://www.ibm.com/smarterplanet/br/pt/" target="_blank"><strong>IBM</strong></a><br /> 
                A IBM, uma das maiores empresas de tecnologia da informação do mundo, é líder em
                soluções completas de TI, que envolvem serviços, consultoria, hardware, software
                e financiamento. Há quase 100 anos desenvolve inovações e promove o uso da tecnologia
                em benefício das empresas e da sociedade, com o objetivo de construir um planeta
                mais inteligente.<br />
                <br />
                A companhia acredita que o fenômeno da globalização, que aproxima e conecta pessoas
                e empresas, alinhado à evolução, representa um imenso potencial para aplicar a tecnologia
                no desenvolvimento de um mundo mais sustentável, com menos desperdício e mais eficiência.
                Desta forma, a IBM conduz os seus processos de negócios, desenvolve projetos e realiza
                parcerias com a finalidade de colocar a tecnologia a serviço da sociedade, pois
                acredita que excelência tecnológica está associada ao bem-estar social.
            </div>
            <div class="tab-content" id="tabs5">
                <strong>Presidente do Conselho Diretor</strong><br />
                <br />
                Carlos Mário Siffert de Paula e Silva – Promon<br />
                <br />
                <strong>Conselheiros:</strong><br />
                <br />
                Beatriz Bier Johannpeter – Gerdau<br />
                José Paulo Soares Martins – Gerdau<br />
                Luiz Gonzaga Marinho Brandão – Promon<br />
                Rodrigo Kede – IBM<br />
                Alcely Barroso – IBM<br />
                <br />
                <strong>Conselho Fiscal:</strong><br />
                <br />
                Clódis Xavier da Silva - Gerdau<br />
                Maria Cristina Varalla Mendes – Promon<br />
                <br />
                <strong>Equipe:</strong><br />
                <br />
                Araly Palacios – Executiva<br />
                Jessica Ribeiro – Assistente de Projetos<br />
                <br />
                Walkyria Dias – Gerente de Projetos Pedagógicos<br />
                Marcelo Garcia – Gerente de Projetos<br />
                Fernando Nogueira – Analista de Sistemas<br />
                Zyon Dias – Analista Programador<br />
                Fernanda Fonseca – Suporte Técnico<br />
                Bruna Soder - Suporte Técnico<br />
            </div>
        </div>
    </div>
     </div>
                
<?php include("inc/parceiros.php");
include("inc/rodape.php"); 
?>
