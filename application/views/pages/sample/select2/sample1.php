<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?=base_url()?>bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?=base_url()?>bower_components/select2/dist/css/select2-bootstrap.min.css">

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
				    <h3 class="box-title title">Select2 Custom Option </h3>
                </div>
                <div class="box-body">
                    <select id="sel2-cust-option" class="col-lg-12"></select>
                    <script type="text/javascript">
                        function sel2CustomOption(option){
                            tmp = $("<div style='display:inline-block;width:50px'>"+option.id +"</div><div style='display:inline-block;width:100px'>"+option.text +"</div><div style='display:inline-block'>"+option.oth +"</div>");
                            return tmp;
                        }
                        function formatSelection(selectedOption){
                            //tmp = $("<div style='display:inline-block;width:50px'>"+selectedOption.id +"</div><div style='display:inline-block;width:100px'>"+selectedOption.text +"</div><div style='display:inline-block'>"+selectedOption.oth +"</div>");
                            tmp = $("<div style='display:inline-block'>"+selectedOption.id +" | "+selectedOption.text +" | "+selectedOption.oth +"</div>");
                            return tmp;
                        }

                        $(function(){
                            console.log("ready 1");
                            var data = [
                                {id: 0,text: 'enhancement',oth:'Other 1'},
                                {id: 1,text: 'bug',oth:'Other 2'},
                                {id: 2,text: 'duplicate',oth:'Other 3'},
                                {id: 3,text: 'invalid',oth:'Other 4'},
                                {id: 4,text: 'wontfix',oth:'Other 5'}
                            ];
                            

                            $("#sel2-cust-option").select2({
                                data:data,
                                templateResult: sel2CustomOption,
                                templateSelection: formatSelection,
                                theme: "coba2"
                            });
                        });

                        $(function(){
                            console.log("ready 2");
                            
                        });
                        
                        
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Select2 -->
<script src="<?=base_url()?>bower_components/select2/dist/js/select2.full.js"></script>