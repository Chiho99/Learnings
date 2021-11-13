"""MUST: request and response"""
from django.http import HttpResponse
from django.views.generic import TemplateView

# def helloworldFunction(request):
#     return_object =  HttpResponse("<h1>Hello world</h1>")
#     return return_object

def someview(request):
    # print(Path(__file__).resolve().parent)
    return HttpResponse('Happy Hacking')

class HelloWorld(TemplateView):
    template_name = 'hello.html'
