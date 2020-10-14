<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
/*** [!] Legacy API Mobile ***/
class Api_mob extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model_new', 'mapi');

        date_default_timezone_set('Asia/Jakarta');
    }

    public function topBanner()
    {
        echo json_encode(
            array(
                'status' => 'success',
                'kode' => 200,
                'topBanner' => 'https://www.ayobandung.com/assets/img/mobile/ads/mbjb-debit-feb2019.jpg',
                'ads_size' => 40.1,
                'ads_link_1' => 'http://www.bankbjb.co.id/'
            )
        );
    }

    public function getAll()
    {
        $recent = $this->mapi->getRecentArticle(0, 10, 0, 0);
        $popular = $this->mapi->getPopular(1, 10, 0);
        $photo = $this->mapi->getRecentPhoto(5, 0, 0);
        // $video = $this->mapi->getRecentVideo("6", "0", 0);
        $persebaya = $this->mapi->getRecentArticle(5, 5, 0, 0);
        $headline = $this->mapi->getHeadline(0, 5, 0);

        // $image_ads_1 = 'https://www.ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
        $image_ads_1 = '';
        $image_ads_2  = null;
        $image_ads_3 = null;
        // $image_ads_4  = 'https://www.ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
        $image_ads_4  = '';
        // $image_ads_5 = 'https://www.ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
        $image_ads_5 = '';
        $ads_link_1 = '';
        $ads_link_2 = '';
        $ads_link_3 = '';
        $ads_link_4 = '';
        $ads_link_5 = '';
        $ads_size_1 = 40.1;
        $ads_size_2 = 40.1;
        $ads_size_3 = 200.1;
        $ads_size_4 = 40.1;
        $ads_size_5 = 40.1;

        echo json_encode(
            array(
                'status' => 'success',
                'kode' => 200,
                'headline' => $headline,
                'recent' => $recent,
                'popular' => $popular,
                'persebaya' => $persebaya,
                'photo' => $photo,
                // 'video' => $video,
                'image_ads_1' => $image_ads_1,
                'image_ads_2' => $image_ads_2,
                'image_ads_3' => $image_ads_3,
                'image_ads_4' => $image_ads_4,
                'image_ads_5' => $image_ads_5,
                'ads_link_1' => $ads_link_1,
                'ads_link_2' => $ads_link_2,
                'ads_link_3' => $ads_link_3,
                'ads_link_4' => $ads_link_4,
                'ads_link_5' => $ads_link_5,
                'ads_size_1' => $ads_size_1,
                'ads_size_2' => $ads_size_2,
                'ads_size_3' => $ads_size_3,
                'ads_size_4' => $ads_size_4,
                'ads_size_5' => $ads_size_5
            )
        );
    }

    // Get Headline Article JSON
    // 1st Param : 0 for Home
    function getHeadline()
    {
        $id_category = $this->input->post('cat_id');
        if ($id_category == '') {
            $id_category = 0;
        }

        $limit = $this->input->post('limit');
        if ($limit == '') {
            $limit = 10;
        }

        $response = $this->mapi->getHeadline($id_category, $limit, 1);

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Get Editor's Choice Article JSON
    function getEditorsChoice()
    {
        $limit = $this->input->post('limit');
        $response = $this->mapi->getEditorsChoice($limit);

        echo json_encode($response);
    }

    // Get Trending Article JSON
    function getTrending()
    {
        $limit = $this->input->post('limit');
        $response = $this->mapi->getTrending($limit);

        echo json_encode($response);
    }

    // Get Must Read Article JSON
    // 1st Param : 0 for Home
    function getMustRead()
    {
        $id_category = $this->input->post('cat_id');
        $limit = $this->input->post('limit');
        $response = $this->mapi->getMustRead($id_category, $limit);

        echo json_encode($response);
    }

    /**
     * Get Recent Article JSON
     *
     * 1st param: id category (set to '0' for home page)
     * 2st param: limit how many article do you want to get in 1 page
     * 3rd param: page
     */
    function getRecentArticle()
    {
        $id_category = $this->input->post('cat_id');
        $limit = $this->input->post('limit');
        $page = $this->input->post('page');
        $response = $this->mapi->getRecentArticle($id_category, $limit, $page, 1);

        echo json_encode($response);
    }

    /**
     * Get Popular Article JSON
     *
     * 1st param: time interval (1=24hours; 2=3days; 3=1months)
     * 2st param: limit how many article do you want to get in 1 page
     */
    function getPopular()
    {
        $interval = $this->input->post('interval');
        if ($interval == '') {
            $interval = 1;
        }

        $limit = $this->input->post('limit');
        if ($limit == '') {
            $limit = 30;
        }

        $response = $this->mapi->getPopular($interval, $limit, 1);

        header('Content-Type: application/json');
        echo json_encode($response);
    }


    /**
     * Get Article JSON
     * 
     * param : article/ post id 
     */
    function getArticle()
    {
        $id = $this->input->post('id');
        $datetime = date('Y-m-d H:i:s');
        $response = $this->mapi->getArticle($id, $datetime);

        echo json_encode($response);
    }

    /**
     * Get Related Article JSON
     *
     * param : article/ post id 
     */
    function getRelatedArticle()
    {
        $id = $this->input->post('id');
        $keyword = $this->input->post('keyword');
        $response = $this->mapi->getRelatedArticle($id, $keyword);

        echo json_encode($response);
    }

    /**
     * Get Recent Photo JSON
     *
     * 1st param : limit how many article do you want to get in 1 page
     * 2nd param : page
     */
    function getRecentPhoto()
    {
        $limit = $this->input->post('limit');
        $page = $this->input->post('page');
        $response = $this->mapi->getRecentPhoto($limit, $page, 1);

        echo json_encode($response);
    }

    /**
     * Get Detail Photo JSON
     *
     * param : post_id
     */
    function getPhoto()
    {
        $id = $this->input->post('id');
        $response = $this->mapi->getPhoto($id);

        echo json_encode($response);
    }

    /**
     * Get Recent Video JSON
     * 
     * 1st param : limit how many article do you want to get in 1 page
     * 2nd param : page
     */
    function getRecentVideo()
    {
        $limit = $this->input->post('limit');
        $page = $this->input->post('page');
        $response = $this->mapi->getRecentVideo($limit, $page, 1);

        echo json_encode($response);
    }

    /**
     * Get Detail Video JSON
     *
     * param : video_id
     */
    function getVideo()
    {
        $id = $this->input->post('id');
        $response = $this->mapi->getVideo($id);

        echo json_encode($response);
    }

    // Get Searched Article JSON
    // param : keyword
    function getSearch()
    {
        $search = $this->input->post('search');
        $response = $this->mapi->getSearch($search);

        echo json_encode($response);
    }

    // Get Kanal JSON
    // return kanal name and id
    function getKanal()
    {
        $response = $this->mapi->getKanal();
        echo json_encode($response);
    }

    // Get index of one day JSON
    // param : date format dd/mm/yyyy
    function getIndex()
    {
        $id_category = $this->input->post('cat_id');
        $date = $this->input->post('date');
        $response = $this->mapi->getIndex($id_category, $date);

        echo json_encode($response);
    }

    // Get company pages
    // param : about_us, management_editorial, privacy_policy, advertise, media_partner, terms_conditions
    function getPages()
    {
        $response = $this->mapi->getPages();

        echo json_encode($response);
    }

    function getVersionApp()
    {
        $device = $this->input->post('device');
        $response = $this->mapi->get_version_app($device);

        echo json_encode($response);
    }
}
