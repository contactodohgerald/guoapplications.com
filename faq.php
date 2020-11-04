<?php require_once ("head.php")?>

<?php require_once ("header_2.php")?>

<?php
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://guo.guoapplications.com/api/getAllFAQ',
    CURLOPT_USERAGENT => 'Get About Us Details',

]);

$response = curl_exec($curl);

$responseArray = json_decode($response);
curl_close($curl)
?>

<!--BANNER START-->
<div class="kode-inner-banner">
    <div class="kode-page-heading">
       <!-- <h2>FAQ</h2>
        <ol class="breadcrumb">
            <li><a href="./">Home</a></li>
            <li class="active">FAQ</li>
        </ol>-->
    </div>
    <?php require_once ("downloadAppHold.php")?>
</div>
<!--BANNER END-->
<!--CONTENT START-->
    <div class="kode-content">
        <!--ABOUT INFO SECTION START-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kd-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php  $counter = 0; foreach ($responseArray->return_data as $responses){ $counter++;?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne<?php print_r($counter)?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php print_r($counter)?>" aria-expanded="true" aria-controls="collapseOne<?php print_r($counter)?>">
                                                <?php echo $responses->question?>
                                                <i class="fa fa-minus"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne<?php print_r($counter)?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?php print_r($counter)?>">
                                        <div class="panel-body" id="faq<?php print_r($counter)?>">
                                            <?php echo $responses->answers?>
                                        </div>
                                    </div>
                                </div>
                                <?php  }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ABOUT INFO SECTION END-->
    </div>
<!--CONTENT END-->


<?php require_once ("footer.php")?>

<?php require_once ("e_script.php")?>


