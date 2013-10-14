#g=[]
#u=[0,0]
#v=[0,1]
def extended_euclidean(a,n):
    #global g,u,v
    gprev = n
    uprev = 1
    vprev = 0
    #u[0] = 1
    #v[0] = 0
    #g1 = a
    gcurr = a
    ucurr = 0
    vcurr = 1
    gcurr = a
    #u[1] = 0
    #v[1] = 1
    i = 1
    #g[0] = n
    #g[1] = a
    while(gcurr !=0):
        #y = g[i-1]/g[i]
        #g[i+1] = g[i-1] - y*g[i]
        #g[i+1] = g[i-1]%g[i]
        #u[i+1] = u[i-1]-y*u[i]
        #v[i+1] = v[i-1]-y*v[i]
        y = gprev/gcurr
        gnext = gprev - y*gcurr
       # gnext = gprev%gcurr
        unext = uprev - y*ucurr
        vnext = vprev - y*vcurr
        gprev=gcurr
        gcurr=gnext
        uprev = ucurr
        ucurr = unext
        vprev = vcurr
        vcurr = vnext

    print vprev
    return vprev

extended_euclidean(299,323)


