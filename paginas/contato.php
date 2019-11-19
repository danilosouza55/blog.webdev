<div class="container space conteudo">

    <h1>Entre em <strong>Contato</strong></h1>
    <hr>
    <p class="text-center">
        Preencha o formulário abaixo para entrar em contato:
    </p>

    <div class="row shadow">
        <div class="col-12 col-md-6">
            <div class="content">
                <form name="form1" method="post" action="#">
                    <label for="nome" class="invisible">Digite seu nome:</label>
                    <input type="text" name="nome" class="form-control form-control-lg" placeholder="Digite seu nome"
                           required arial-describedby="ajudaNome">
                    <small id="ajudaNome" class="form-text invisible">Digite seu nome completo</small>

                    <label for="email" class="invisible">Digite seu e-mail:</label>
                    <input type="email" name="email" class="form-control form-control-lg"
                           placeholder="Digite seu e-mail" required arial-describedby="ajudaEmail">
                    <small id="ajudaEmail" class="form-text invisible">Digite um e-mail válido</small>

                    <label for="telefone" class="invisible">Digite seu telefone:</label>
                    <input type="text" name="telefone" class="form-control form-control-lg mask"
                           placeholder="Digite seu telefone" required data-inputmask="'mask': '(99) 99999-9999'"
                           arial-describedby="ajudaTelefone">
                    <small id="ajudaTelefone" class="form-text invisible">Digite seu nome completo</small>

                    <label for="mensagem" class="invisible">Digite sua mensagem:</label>
                    <textarea name="nome" class="form-control form-control-lg" placeholder="Digite sua mensagem"
                              required rows="5" arial-describedby="ajudaMensagem"></textarea>
                    <small id="ajudaMensagem" class="form-text invisible">Digite sua mensagem completa</small>

                    <br>

                    <button type="submit" class="btn btn-success btn-lg w-100">
                        <i class="fas fa-check"></i> Enviar mensagem
                    </button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.362675731016!2d-53.01413128531599!3d-24.053529685835578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f292fa874ff96d%3A0x67dccf99bbcb79ec!2sR.%20Lidio%20S%C3%A1%20Telles%2C%20508-592%2C%20Moreira%20Sales%20-%20PR%2C%2087370-000!5e0!3m2!1spt-BR!2sbr!4v1574122897900!5m2!1spt-BR!2sbr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".mask").focus(function () {
            $(this).selectRange(0, 0);
        });
        $.fn.selectRange = function (start, end) {
            return this.each(function () {
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
