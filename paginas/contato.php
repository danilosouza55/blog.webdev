<div class="container space conteudo">
	
	<h1>Entre em <strong>Contato</strong></h1>
	<hr>
	<p class="text-center">
		Preencha o formulário abaixo para entrar em contato:
	</p>

	<div class="row shadow">
		<div class="col-12 col-md-6">
			<div class="content">
				<form name="form1" method="post" action="https://formspree.io/burnes@professorburnes.com">
					<label for="nome" class="invisible">Digite seu nome:</label>
					<input type="text" name="nome" class="form-control form-control-lg" placeholder="Digite seu nome" required arial-describedby="ajudaNome">
					<small id="ajudaNome" class="form-text invisible">Digite seu nome completo</small>

					<label for="email" class="invisible">Digite seu e-mail:</label>
					<input type="email" name="email" class="form-control form-control-lg" placeholder="Digite seu e-mail" required arial-describedby="ajudaEmail">
					<small id="ajudaEmail" class="form-text invisible">Digite um e-mail válido</small>

					<label for="telefone" class="invisible">Digite seu telefone:</label>
					<input type="text" name="telefone" class="form-control form-control-lg mask" placeholder="Digite seu telefone" required data-inputmask="'mask': '(99) 99999-9999'"
					arial-describedby="ajudaTelefone">
					<small id="ajudaTelefone" class="form-text invisible">Digite seu nome completo</small>

					<label for="mensagem" class="invisible">Digite sua mensagem:</label>
					<textarea name="nome" class="form-control form-control-lg" placeholder="Digite sua mensagem" required rows="5" arial-describedby="ajudaMensagem"></textarea>
					<small id="ajudaMensagem" class="form-text invisible">Digite sua mensagem completa</small>

					<br >

					<button type="submit" class="btn btn-success btn-lg w-100">
						<i class="fas fa-check"></i> Enviar mensagem
					</button>
				</form>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5678647780437!2d-53.32331449690005!3d-23.548040161749395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x948d28c11f2c4a3b%3A0x31b1adc1e3a27301!2sCarbonera%2C%20Maria%20Helena%20-%20PR%2C%2087480-000!5e0!3m2!1spt-BR!2sbr!4v1568299428380!5m2!1spt-BR!2sbr" width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".mask").focus(function(){
          $(this).selectRange(0,0);
        });
		$.fn.selectRange = function(start, end) {
          return this.each(function() {
              if (this.setSelectionRange) {
                  this.focus();
                  this.setSelectionRange(start, end);
              } else if (this.createTextRange) {
                  var range = this.createTextRange();
                  range.collapse(true);
                  range.moveEnd('character', end);
                  range.moveStart('character', start);
                  range.select();
              }
          });
        };
	})
</script>