# homehome-pixnet-hackathon

### 初始化
1. composer install
2. npm install
3. cp .env.example .env
4. php artisan key:generate 生成 key
5. .env 要設定 DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD (不知道的話在 slack 上問)
6. php artisan serve 執行本地 server 就可以進歡迎頁 (http://127.0.0.1:8000)
7. 如果要修改前端的東西, 要開兩個 terminal, 一個執行 npm run watch, 另一個執行 php artisan serve
