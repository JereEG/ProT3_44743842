<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>
            
            <br><br>
            
            <?php if(session()->perfil_id == 1): ?>
                <img 
                    src="<?= base_url('assets/img/admin.png'); ?>" 
                    alt="Admin"
                    class="img-fluid d-block mx-auto" 
                    style="max-width: 400px;"
                >
            <?php elseif(session()->perfil_id == 2): ?>
                <img 
                    src="<?= base_url('assets/img/cliente.png'); ?>" 
                    alt="Cliente"
                    class="img-fluid d-block mx-auto" 
                    style="max-width: 400px;"
                >
            <?php endif;?>
        </div>
    </div>
</div>
