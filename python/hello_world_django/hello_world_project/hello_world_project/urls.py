"""project url"""
from django.contrib import admin
from django.urls import path, include
from .views import someview, HelloWorld

urlpatterns = [
    path('admin/', admin.site.urls),
    path('someview/', someview),
    #class => as_view()
    path('helloworld/', HelloWorld.as_view()),
    path('', include('helloworldapp.urls'))
]
