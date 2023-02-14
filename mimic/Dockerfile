FROM python:3.9-alpine

RUN pip install mysql-mimic

COPY mimic.py /mimic.py

EXPOSE 3306
CMD ["python", "/mimic.py"]
