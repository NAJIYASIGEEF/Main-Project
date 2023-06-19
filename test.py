
# coding: utf-8

# In[11]:


import pandas as pd
import joblib


# In[12]:


df=pd.read_csv('test.csv')
df


# In[13]:


file=open('mappings.txt','r')
maps=eval(file.read())
file.close()


# In[14]:


maps


# In[15]:


df.replace(maps,inplace=True)
df


# In[16]:


classifier=joblib.load('model_rf.joblib')
#x=model.predict(ds)
#x[0]


# In[17]:


y_pred=classifier.predict(df)
y_pred[0]


# In[18]:


out={v: k for k, v in maps['Disease'].items()}[y_pred[0]]
print(out)

