install:
	rsync -r --delete --progress --exclude=Makefile ./* marc@marcoliverteschke.de:/srv/www/htdocs/homepage/