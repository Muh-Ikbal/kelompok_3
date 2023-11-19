from django.shortcuts import render
from django.http import HttpResponse
from django.template import Template


def getStarted(request):
    context = {
        'title':'Tiket Kapal Laut',
        'head' : 'Tiket Kapal Laut',
    }
    return render(request,'getStarted.html',context)