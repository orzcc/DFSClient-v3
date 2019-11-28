<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;

use DFSClientV3\Models\AbstractModel;

class KeywordsForCategoryLive extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_category';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}