# -*- coding: utf-8 -*-
import scrapy


class QulaSpider(scrapy.Spider):
    name = 'qula'
    allowed_domains = ['www.qu.la']
    start_urls = ['http://www.qu.la/']

    def parse(self, response):
        pass
