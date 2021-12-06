import pandas as pd
data=pd.read_pickle("/python3/data/station_tmp.pickle.pickle")
df=pd.DataFrame(data)
df.head()