$(function(){
    $('#img').click(function(){
       $('.imagem').show(); 
    });
    $('#video').click(function(){
       $('.video').show(); 
    });


    $('#buscarpostagem').on('keyup', function(){
    	var seach = $('#buscarpostagem').val();
    	var local = "http://localhost/TRABALHOS/BLOG_NICOLE/";
    	var site = "http://www.ganmix.com/";

    	$.ajax({
            type: 'POST',
            url: local+'admin/ajaxPostagens',
            dataType:'json',
            data:{ buscarpostagem:seach },
            success:function(data){
                console.log(data);

                var $html = '<div class="well">';
                for(line in data){
                    user = data[line];
                    $html += 'Titulo: '+user.titulo+' | Autor: '+user.autor+' | Data: '+user.data;
                    $html += ' | <a href="'+local+'editarpost?id='+user.id+'" class="btn btn-success">Editar</a>';
                    $html += ' | <a href="'+local+'eexcluirpost?id='+user.id+'" class="btn btn-danger">Excluir</a><br>';
                }
                $html += '</div>';
                $('#setpostagem').html($html);
            }
        });

    });


    $('#buscarpatrocinador').on('keyup', function(){
    	var seachpatrocinio = $('#buscarpatrocinador').val();
    	var local = "http://localhost/TRABALHOS/BLOG_NICOLE/";
    	var site = "http://www.ganmix.com/";

    	$.ajax({
            type: 'POST',
            url: local+'admin/ajaxPatrocinadores',
            dataType:'json',
            data:{ buscarpatrocinador:seachpatrocinio },
            success:function(data){
            	console.log(data);

                var $html = '<div class="well">';
                for(line in data){
                    user = data[line];
                    $html += 'Empresa: '+user.patrocinador+' | Responsável: '+user.responsavel+' | Contato: '+user.contato+' | E-mail: '+user.email;
                    $html += ' | <a href="'+local+'editarPatrocinador?id='+user.id+'" class="btn btn-success">Editar</a>';
                    $html += ' | <a href="'+local+'excluirPatrocinador?id='+user.id+'" class="btn btn-danger">Excluir</a>';
                }
                $html += '</div>';
                $('#setpatrocinadores').html($html);
            }
        });

    });
});
