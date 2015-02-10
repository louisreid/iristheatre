<?php
/**
 * Gets a single Facebook Album
 *
 * @author fchari
 */
class FppgAlbum {

    public $id;
    public $name;
    public $description;
    public $photos;
    public $paging;
    public $settings;

    public function __construct($albumid = "", $options = array()) {
        $this->settings=  get_option('fppg');
        if ($albumid != ""){
            $this->getAlbum($albumid, $options);
        }
       
        
    }

    /**
     * Get an album
     * @param type $albumid
     * @param array $options array with token,limit
     */
    private function getAlbum($albumId, $options = array()) { 
        $limit = isset($options['limit']) ? $options['limit'] : 20;
        $page=isset($options['page'])?$options['page']:1;
        if (false === ( $response = get_transient($albumId . "_fppg_" . $page) )&& $this->settings['fppg_cacheTime']!=="") { 
        $response = FppgUtility::remoteGet(FppgUtility::FB_URL . $albumId . "?fields=photos.limit($limit)");
        set_transient($albumId . "_fppg_" . $page, $response, $this->settings['fppg_cacheTime'] * MINUTE_IN_SECONDS);
        }else{
           $response = FppgUtility::remoteGet(FppgUtility::FB_URL . $albumId . "?fields=photos.limit($limit)");
        }
        $this->id = $response->id;
        $this->photos = $response->photos;
        $this->paging = $response->photos->paging;
        ;
    }

    /**
     * Get an album ajax
     * @param type $albumid
     * @param array $options array with token,limit
     */
    public function getAlbumAjax($albumId, $args, $options = array()) {
        $page=isset($options['page'])?$options['page']:1;
        if (false === ( $response = get_transient($albumId . "_fppg_" . $page) )) {
            $response = FppgUtility::remoteGet(FppgUtility::FB_URL . $albumId . "/photos?$args");
            set_transient($albumId . "_fppg_" . $page, $response, $this->settings['fppg_cacheTime'] * MINUTE_IN_SECONDS);
        }
        else{
           $response = FppgUtility::remoteGet(FppgUtility::FB_URL . $albumId . "/photos?$args");
        }
        $this->photos = $response->data;
        $this->paging = $response->paging;
    }

}
