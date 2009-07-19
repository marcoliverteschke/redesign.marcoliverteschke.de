install:
	rsync -r --delete --progress --exclude=Makefile ./* root@marcoliverteschke.de:/srv/www/htdocs/homepage/