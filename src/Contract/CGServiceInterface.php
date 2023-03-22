<?php
declare(strict_types=1);
namespace GiocoPlus\CG\Contract;
/**
 * CG
 */
interface CGServiceInterface {

    /**
     * 遊戲啟動
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     * @param string $op_code       // 營運商代碼
     * @param int $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     * @param int $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);
}

