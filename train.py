
# coding: utf-8

# In[37]:


import pandas as pd
from sklearn.metrics import accuracy_score, confusion_matrix, classification_report
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
import joblib
from sklearn.svm import SVC
import matplotlib.pyplot as plt
from sklearn.metrics import roc_curve, auc, precision_recall_curve


# In[21]:


data=pd.read_csv('dataset.csv')
data.head()


# In[22]:


data=data.iloc[:,:5]
data.dropna(inplace=True)
data.head()


# In[23]:


data['Disease'].unique()


# In[24]:


label_counts = data['Disease'].value_counts()

# Print the counts
print(label_counts)


# In[25]:


maps=dict()
def find_category_mappings(data, variable):
    return {k: i for i, k in enumerate(data[variable].unique())}
def integer_encode(data,variable, ordinal_mapping):
    data[variable] = data[variable].map(ordinal_mapping)
for variable in ['Disease','Symptom_1','Symptom_2','Symptom_3','Symptom_4']:
    #print(variable)
    mappings = find_category_mappings(data,variable)
    maps[variable]=mappings
    integer_encode(data, variable, mappings)
data.head()


# In[26]:


maps


# In[27]:


data['Disease'].unique()


# In[28]:


file=open("mappings.txt","w")
file.write(str(maps))
file.close()


# In[11]:


x=data.iloc[:,1:5]
x.head()


# In[12]:


y=data['Disease']
y.head()


# In[13]:


X_train,X_test,y_train,y_test=train_test_split(x,y,test_size=0.3,random_state=0)


# In[14]:


clf_rf=RandomForestClassifier(random_state=0)


# In[15]:


clf_rf.fit(X_train,y_train)


# In[16]:


y_pred=clf_rf.predict(X_test)


# In[17]:


acc_rf=accuracy_score(y_pred,y_test)
cm_rf=confusion_matrix(y_pred,y_test)
cr_rf=classification_report(y_pred,y_test)


# In[18]:


print(acc_rf)
print(cm_rf)
print(cr_rf)


# In[19]:


joblib.dump(clf_rf,'model_rf.joblib')


# In[40]:


classifier_svm=SVC(probability=True)
classifier_svm.fit(X_train,y_train)


# In[41]:


y_pred_svm=classifier_svm.predict(X_test)


# In[42]:


acc_svm=accuracy_score(y_pred_svm,y_test)
cm_svm=confusion_matrix(y_pred_svm,y_test)
cr_svm=classification_report(y_pred_svm,y_test)


# In[43]:


print(acc_svm)
print(cm_svm)
print(cr_svm)


# In[35]:


#plotting accuracy graph
x=['svm','rf']
y=[acc_svm,acc_rf]
c=['red','green']


# In[36]:


plt.bar(x,y,color=c)
plt.xlabel('Algorithms')
plt.ylabel('Accuracy Score')
plt.title('Comparison Graph')
#plt.show()
plt.savefig('acc_graph.png')
plt.close()

