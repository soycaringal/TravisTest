serverUrl='http://127.0.0.1:4444'
serverFile=selenium-server-standalone-2.35.0.jar
phpVersion=`php -v`

echo "Starting Selenium"
if [ ! -f $serverFile ]; then
    wget http://selenium.googlecode.com/files/$serverFile
fi
# sudo xvfb-run java -jar $serverFile > /tmp/selenium.log &
sudo java -jar $serverFile > /tmp/selenium.log &

wget --retry-connrefused --tries=60 --waitretry=1 --output-file=/dev/null $serverUrl/wd/hub/status -O /dev/null
if [ ! $? -eq 0 ]; then
    echo "Selenium Server not started"
else
    echo "Finished setup"
fi