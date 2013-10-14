def jacobian_modfified_doubling():
    if(y == 0):
        print "point at infinity"
    else:
        s = 4*x*y*y
        u = 8*y*y*y*y
        m = 3*x*x + (az*az*az*az)
        xp = m*m - (2*s)
        yp = m*(s-xp)-u
        zp = 2*y*z
        t = 2*u*az *az*az*az

        return [xp,yp,zp,t]

def jacobian_modfified_addition():
    
    
