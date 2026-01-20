<style>
    .solapa {
        font-size: 23px;
    }
    .solapa-bottom{
        height: 17px;
        width: auto;
        background-color: rgb(24, 86, 62,0.9);
        padding-left: 15px;
    }
</style>
<section id="slider" class="visible-lg visible-md">
    <div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item slide-1"></div>
                <div class="item slide-2"></div>
                <div class="item slide-3 active"></div>
                <!-- <div class="item slide-4 active"></div>   -->
                <div class="solapa">
                <div class="solapa-bottom">
                    <div class="container">
                        <p class="texto-solapa" style="margin-left: 30px;"></p>
                    </div>
                </div>
            </div>  
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fas fa-chevron-circle-left" aria-hidden="true" style="margin-top:180px;"></span>
                <span class="sr-only">Slide anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fas fa-chevron-circle-right" style="margin-top:180px;" aria-hidden="true"></span>
                <span class="sr-only">Slide siguiente</span>
            </a>
              
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('.slide-1').click(function (e) { 
            var link = $("<a>");
            link.attr("id","pdf");
            link.attr("href", "<?= $this->Url->build('/files/CC-BI904B-Coronavirus-evitar-circulacion.qxp_Layout-1.pdf') ?>");
            link.attr("target","_blank");
            link[0].click();
        });
    });
</script>

