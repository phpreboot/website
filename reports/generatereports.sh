# Codesniffer reports
rm -R reports/codesniffer
mkdir reports/codesniffer
vendor/bin/phpcs --standard=reports/phprcs.xml app > reports/codesniffer/phpcs.txt
vendor/bin/phpcs -s --report=source --standard=reports/phprcs.xml app > reports/codesniffer/phpcssummart.txt
vendor/bin/phpcs -s --standard=reports/phprcs.xml app > reports/codesniffer/phpcssummary2.txt

# PHP mess detector reports
rm -R reports/phpmd
mkdir reports/phpmd
vendor/bin/phpmd app text reports/phprmd.xml > reports/phpmd/phpmd.txt

# PHP copy-paste detector report
rm -R reports/copypaste
mkdir reports/copypaste
vendor/bin/phpcpd app > reports/copypaste/phpcpd.txt

# PHP Metrics
rm -R reports/phpmetrics
mkdir reports/phpmetrics
vendor/bin/phpmetrics --report-html=reports/phpmetrics/phpmetrics.html app