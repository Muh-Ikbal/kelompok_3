from django.shortcuts import render
from django.http import HttpResponse


def dashboard(request):
    context = {
        "title": "Tiket Kapal Laut",
        "head": "Tiket Kapal Laut",
    }
    return render(request, "dashboard.html", context)


# Create your views here.
