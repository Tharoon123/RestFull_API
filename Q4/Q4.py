import http.client

conn = http.client.HTTPSConnection("wft-geo-db.p.rapidapi.com")

headers = {
    'X-RapidAPI-Key': "24ebf8320emsha4891e2023f7051p1f1dd2jsn448b3f39d444",
    'X-RapidAPI-Host': "wft-geo-db.p.rapidapi.com"
}

conn.request("GET", "/v1/geo/countries/NZ/places", headers=headers)


res = conn.getresponse()
data = res.read()

#print(data.decode("utf-8"))

import json
obj=json.loads(data.decode("utf-8"));
JData=obj['data'];
#Jneed=JData['id', 'type', 'name']
print(JData)

import pandas as pd
df=pd.DataFrame(JData);
filtered_df = df[['id', 'name', 'type', 'regionCode']]
print(filtered_df)