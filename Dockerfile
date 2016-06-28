FROM asiainfoldpone/baseimage-java

ENV TIME_ZONE=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone
#VOLUME /volume-data/zbox:/opt/zbox
  
WORKDIR /opt/zbox
ADD zbox /opt/zbox
EXPOSE 80

ENV SERVICE_NAME=zentao
#ADD 
CMD echo '65534' > /opt/zbox/tmp/apache/httpd.pid && ./zbox start && tail -f
