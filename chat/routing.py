from django.urls import path
from . import user

websocket_urlpatterns = [
    path('ws/chat/<room_name>/',user.ChatConsumer),
]