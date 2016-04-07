<?php


 function autoload_d353cb790176c1292d7a467eb5cb53e6($class)
{
    $classes = array(
        'Brasilcard\Payments\SaleService\SaleService' => __DIR__ .'/SaleService.php',
        'Brasilcard\Payments\SaleService\request' => __DIR__ .'/request.php',
        'Brasilcard\Payments\SaleService\saleRequest' => __DIR__ .'/saleRequest.php',
        'Brasilcard\Payments\SaleService\requestResponse' => __DIR__ .'/requestResponse.php',
        'Brasilcard\Payments\SaleService\saleResponse' => __DIR__ .'/saleResponse.php',
        'Brasilcard\Payments\SaleService\confirm' => __DIR__ .'/confirm.php',
        'Brasilcard\Payments\SaleService\saleConfirmation' => __DIR__ .'/saleConfirmation.php',
        'Brasilcard\Payments\SaleService\confirmResponse' => __DIR__ .'/confirmResponse.php',
        'Brasilcard\Payments\SaleService\cancel' => __DIR__ .'/cancel.php',
        'Brasilcard\Payments\SaleService\cancellationRequest' => __DIR__ .'/cancellationRequest.php',
        'Brasilcard\Payments\SaleService\saleInfo' => __DIR__ .'/saleInfo.php',
        'Brasilcard\Payments\SaleService\cancelResponse' => __DIR__ .'/cancelResponse.php',
        'Brasilcard\Payments\SaleService\cancellationResponse' => __DIR__ .'/cancellationResponse.php',
        'Brasilcard\Payments\SaleService\reverse' => __DIR__ .'/reverse.php',
        'Brasilcard\Payments\SaleService\reversalRequest' => __DIR__ .'/reversalRequest.php',
        'Brasilcard\Payments\SaleService\reverseResponse' => __DIR__ .'/reverseResponse.php',
        'Brasilcard\Payments\SaleService\reversalResponse' => __DIR__ .'/reversalResponse.php',
        'Brasilcard\Payments\SaleService\confirmCancellation' => __DIR__ .'/confirmCancellation.php',
        'Brasilcard\Payments\SaleService\cancellationConfirmation' => __DIR__ .'/cancellationConfirmation.php',
        'Brasilcard\Payments\SaleService\confirmCancellationResponse' => __DIR__ .'/confirmCancellationResponse.php',
        'Brasilcard\Payments\SaleService\getInstallmentOptions' => __DIR__ .'/getInstallmentOptions.php',
        'Brasilcard\Payments\SaleService\getInstallmentOptionsResponse' => __DIR__ .'/getInstallmentOptionsResponse.php',
        'Brasilcard\Payments\SaleService\installmentOption' => __DIR__ .'/installmentOption.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d353cb790176c1292d7a467eb5cb53e6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
