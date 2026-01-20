<style>
    
    .solapa {
        font-size: 18px;
    }
    .solapa-top{
        height: 50px;
        width: 260px;
        background-color: rgb(24, 86, 62,0.9);
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        padding-top: 15px;
        padding-left: 15px;
    }
    .solapa-bottom{
        height: 35px;
        width: 260px;
        background-color: rgb(24, 86, 62,0.9);
        padding-left: 15px;
    }
</style>

<div class="solapa">
    <div class="solapa-top">
        <?php if(isset($solapa_titulo)): ?>
            <p class="texto-solapa"><?= $solapa_titulo ?></p>
        <?php endif; ?>
    </div>
    <div class="solapa-bottom">
        <?php if(isset($solapa_texto)): ?>
            <p class="texto-solapa"><b><?= $solapa_texto ?></b></p>
        <?php endif; ?>
    </div>
</div>
