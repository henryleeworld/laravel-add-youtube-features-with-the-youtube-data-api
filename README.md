# Laravel 10 透過 YouTube 資料應用程式介面新增 YouTube 功能

引入 alaouy 的 youtube 套件來擴增與 YouTube 整合來取得 YouTube 影片的影片封面、標題、說明、評分等統計資料，進而提供搜尋、觀看影片的服務。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/youtube/show/` 來進行取得 YouTube 影片的資料。

----
## 畫面截圖
![](https://i.imgur.com/cYEVGiW.png)
> YouTube 影片觀看次數代表觀眾觀看某一部影片的次數，可以視為衡量影片整體熱門程度的重要指標