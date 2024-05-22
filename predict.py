import sys
from joblib import load
import numpy as np
import warnings
warnings.filterwarnings("ignore")
inputstring=sys.argv[1]
l=list(map(int,inputstring.split(" ")))
l=np.array(l).reshape(1,-1)
model=load("MODEL.joblib")
print(model.predict(l)[0])
