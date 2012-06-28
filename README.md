twitter -search
======================
Twitter search api is used simply.
 
 
usage
------ 
### ブロックレベル ###
    require_once 'twitterSearch.php';    
    
    $twitterSearch = new TwitterSearch();
    
    $requestParams = array( 
        'q' => 'searchquery', 
        'until' => '2012-06-28', 
        'rpp' => '20', 
        'page' => '1', 
    );
    
    $twitterSearch->setRequestParam($requestParams);     
    $source = $twitterSearch->httpRequest($twitterSearch->generateUrl()); 
    $result =  $twitterSearch->jsonDecode($source);
    
    var_dump ($result);
    
    // count up page number 
    $twitterSearch->upPage();
    
    $source = $twitterSearch->httpRequest($twitterSearch->generateUrl()); 
    $result = $twitterSearch->jsonDecode($source);
    
    // 2 page 
    var_dump ($result)
 
ライセンス
----------
Copyright &copy; 2012 Shohei Yamasaki
Licensed under the [Apache License, Version 2.0][Apache]
Distributed under the [MIT License][mit].
Dual licensed under the [MIT license][MIT] and [GPL license][GPL].
 
[Apache]: http://www.apache.org/licenses/LICENSE-2.0
[MIT]: http://www.opensource.org/licenses/mit-license.php
[GPL]: http://www.gnu.org/licenses/gpl.html
