<!-- CSS da página -->
<link rel="stylesheet" href="assets/css/agenda.css">

<section>

    <div class="col-md-6 mx-auto">

        <h2> Agenda </h2>

        <!-- Formulário -->
        <form id="formAgenda">

            <!-- CRM Médico -->
            <div class="mb-3">
                <label for="crmMed"> CRM Médico </label>
                <input type="text" id="crmMed" name="crmMed" class="form-control">
            </div>

            <!-- CPF -->
            <div class="mb-3">
                <label for="cpf"> CPF </label>
                <input type="text" id="cpf" name="cpf" class="form-control">
            </div>

            <!-- Data -->
            <div class="mb-3">
                <label for="data"> Data </label>
                <input type="text" id="data" name="data" class="form-control">
            </div>

            <!-- Horário -->
            <div class="mb-3">
                <label for="horario"> Horário </label>
                <input type="text" id="horario" name="horario" class="form-control">
            </div>


            <!-- Botão cadastrar -->
            <button type="submit" class="btn btn-primary w-100">
                Cadastrar
            </button>


            <!-- Mensagem de retorno -->
            <div id="mensagem" class="alert d-none mt-3"></div>


        </form>


    </div>

    <script src="assets/js/agenda.js"></script>

</section>