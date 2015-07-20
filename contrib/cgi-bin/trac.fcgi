#!/usr/bin/python
# -*- coding: utf-8 -*-
#
# Copyright (C) 2003-2013 Edgewall Software
# Copyright (C) 2003-2004 Jonas Borgström <jonas@edgewall.com>
# All rights reserved.
#
# This software is licensed as described in the file COPYING, which
# you should have received as part of this distribution. The terms
# are also available at http://trac.edgewall.org/wiki/TracLicense.
#
# This software consists of voluntary contributions made by many
# individuals. For the exact contribution history, see the revision
# history and logs, available at http://trac.edgewall.org/log/.
#
# Author: Jonas Borgström <jonas@edgewall.com>

from __future__ import print_function

try:
    from trac.web import fcgi_frontend
    fcgi_frontend.run()
except SystemExit:
    raise
except Exception as e:
    print("Content-Type: text/plain\r\n\r\n", end=' ')
    print("Oops...")
    print()
    print("Trac detected an internal error:")
    print()
    print(e)
    print()
    import traceback
    from six import StringIO
    tb = StringIO()
    traceback.print_exc(file=tb)
    print(tb.getvalue())
