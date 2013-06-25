
$(document).ready(function(){
                
                $('#form1').validate({
                    rules:{
                        txtNome:{
                            required: true                            
                        },
                        txtEmail:{
                            required: true,
                            email: true
                        },
                        txtAssunto:{
                            required: true
                        },
                        txtMensagem:{
                            required: true
                        }
                        
                        },
                        messages:{
                            txtNome:{required: "<div class='msg_erro'> Nome obrigatorio!</span>"
                            },
                            txtEmail:{
                                required: "<div class='msg_erro'>E-mail obrigatorio!</span>",
                                email: "<div class='msg_erro'>E-mail invalido!</span>"
                            },
                            txtAssunto:{
                            required: "<div class='msg_erro'>Assunto obrigatorio!</span>"
                        },
                        txtMensagem:{
                            required: "<div class='msg_erro'>Mensagem obrigatoria!</span>"
                        }
                        }
                });
            });    


