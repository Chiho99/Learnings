from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.

def helloworldappview(requst):
    return HttpResponse('app is called!')