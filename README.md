# mask-blog

git clone https://github.com/wewall/mask-blog tmp && mv tmp/.git . && rm -rf tmp && git reset --hard

git submodule init

git submodule update

chmod 777 ./ -R

chown -R www:www .

chmod -R 755 .
