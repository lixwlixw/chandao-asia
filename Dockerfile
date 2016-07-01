FROM asiainfoldpone/baseimage-java

ENV TIME_ZONE=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone
#VOLUME /volume-data/zbox:/opt/zbox
  
WORKDIR /opt/zbox
ADD zbox /opt/zbox
#RUN sed -i s#/opt/zbox/app/zentao/www#/opt/zbox/data/www#g /opt/zbox/etc/apache/httpd.conf
#RUN sed  '20 aupload_tmp_dir = "/opt/zbox/data/www/data"' -i /opt/zbox/etc/php/php.ini
RUN chmod -R 777 '/opt/zbox/data/www/data/upload/1/'
EXPOSE 80

ENV SERVICE_NAME=zentao
#ADD 
CMD  ./zbox start && tail -f
