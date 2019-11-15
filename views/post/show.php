<h1>show action</h1>
<button class="btn btn-siccess" id="btnok">OK</button>
<?php
    //$this->registerJsFile('@web/js/myscripts.js', ['depends'=>'yii\web\YiiAsset']);
    //$this-> registerJs ( "$('p').append('<p>777777777777777777777777</p>')", yii\web\View::POS_LOAD);
    //$this-> registerCss ( 'p(backcolor: #ccc)');
?>

<?php

$js = <<<JS
    $('#btnok').on('click', function(){
        $.ajax({
            url:'index.php?r=post/index',
            data: {test:'1234567'},
            type:'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        })
    });

JS;
$this -> registerJs($js);
?>