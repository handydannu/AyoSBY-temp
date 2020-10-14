<!--Disini ya kang ijal-->
<br>
<div class="box-cor">
    <div id="banner-display-1">
        <img src="http://www.ayobekasi.net/assets/ads/2020/03/banner-corona.jpg" class="img-responsive" />
    </div>

<section class="col-md-3 col-sm-3 col-xs-3 mg-top-3">
    <strong style="margin-bottom: -10px;">&nbsp;</strong>
    <div class="id-cor">
        <h3>
            </strong>INDONESIA</strong>
        </h3>
    </div>
    <div class="reg-cor">
        <h4>
        </strong>JAWA TIMUR</strong>
        </h4>
    </div>
</section>
<section class="col-md-3 col-sm-3 col-xs-3 mg-top-3">
    <div class="title-cor">POSITIF</div>
    <div class="box-id-pos-cor">
        <h3 class="dat-id-pos-cor">
        <?php echo $indonesia['jumlahKasus']; ?>
        </h3>
    </div>
    <div class="box-reg-pos-cor">
        <h3 class="dat-reg-pos-cor">
        <?php echo $jatim['kasusPosi']; ?>
        </h3>
    </div>
</section>
<section class="col-md-3 col-sm-3 col-xs-3 mg-top-3">
    <div class="title-cor">MENINGGAL</div>
    <div class="box-id-me-cor">
        <h3 class="dat-id-me-cor">
        <?php echo $indonesia['meninggal']; ?>
        </h3>
    </div>
    <div class="box-reg-me-cor">
        <h3 class="dat-reg-me-cor">
        <?php echo $jatim['kasusMeni']; ?>
        </h3>
    </div>
</section>
<section class="col-md-3 col-sm-3 col-xs-3 mg-top-3">
    <div class="title-cor">SEMBUH</div>
    <div class="box-id-recov-cor">
        <h3 class="dat-id-recov-cor">
        <?php echo $indonesia['sembuh']; ?>
        </h3>
    </div>
    <div class="box-reg-recov-cor">
        <h3 class="dat-reg-recov-cor">
        <?php echo $jatim['kasusSemb']; ?>
        </h3>
    </div>
</section>

<p class="spas-up">&nbsp;</p>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="selengkapnya">
            <a href="https://www.ayosurabaya.com/tag/virus-corona">+ Informasi Selengkapnya</a>
            </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="sumber">
            Sumber :  https://www.covid19.go.id
        </div>
    </div>
</div>

</div>

<style>
    .box-cor {
        background: #f1f1f1 !important;
    }
    .id-cor {
        background: #f1f1f1 !important;
        margin-top: -20px;
        border-bottom: 6px solid #D64501 !important;
        text-align: left;
        text-transform: uppercase;
    }
    .reg-cor {
        background: #f1f1f1 !important;
        border-bottom: 6px solid #D64501 !important;
        text-align: left;
        text-transform: uppercase;
    }
    .title-cor {
        margin-bottom: -10px;
        text-align: center;
        font-weight: 700;
    }
    .sumber {
        padding: 10px;
        font-weight: 700;
        text-align: right;
    }
    .selengkapnya {
        padding: 10px;
        font-weight: 700;
        text-align: left;
        text-decoration: none;
        color: #35579f;
    }
    .spas-up {
        margin: 0 0 -10px;
    }
    .spas-bottom {
        margin: -20px 0 0px;
    }
    /**Positif Indonesia */
    .box-id-pos-cor {
        background: #ff9e0d !important;
        border-bottom: 2px solid #ff9e0d !important;
        border-radius: 10px;
        margin-top: -20px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-id-pos-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
    }
    /**Positif Regional */
    .box-reg-pos-cor {
        background: #ff9e0d !important;
        border-bottom: 2px solid #ff9e0d !important;
        border-radius: 10px;
        margin-top: -15px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-reg-pos-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
        margin-top: 20px;
    }
    /**Meninggal Indonesia */
    .box-id-me-cor {
        background: #ed1b24 !important;
        border-bottom: 2px solid #ed1b24 !important;
        border-radius: 10px;
        margin-top: -20px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-id-me-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
        margin-top: 20px;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
    }
    /**Meninggal Regional */
    .box-reg-me-cor {
        background: #ed1b24 !important;
        border-bottom: 2px solid #ed1b24 !important;
        border-radius: 10px;
        margin-top: -15px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-reg-me-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
        margin-top: 20px;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
    }
    /**Sembuh Indonesia */
    .box-id-recov-cor {
        background: #39b54a !important;
        border-bottom: 2px solid #39b54a !important;
        border-radius: 10px;
        margin-top: -20px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-id-recov-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
        margin-top: 20px;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
    }
    /**Sembuh Regional */
    .box-reg-recov-cor {
        background: #39b54a !important;
        border-bottom: 2px solid #39b54a !important;
        border-radius: 10px;
        margin-top: -15px;
        text-align: left;
        text-transform: uppercase;
    }
    .dat-reg-recov-cor {
        font-size: 24px;
        text-align: center;
        padding: 5px;
        color: #FFF;
        margin-bottom: 0px;
        margin-top: 20px;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
    }
</style>